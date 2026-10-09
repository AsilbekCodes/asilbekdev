// Ishlatish: node add-donate.js https://sizning-havola
const fs = require("fs");
const path = require("path");

const link = process.argv[2] || "https://SIZNING-DONAT-HAVOLANGIZ";

const homePath = path.join("src", "pages", "Home.tsx");
const localesDir = path.join("src", "i18n", "locales");
const translations = {
  uz: "Donat qilish",
  en: "Donate",
  ru: "Поддержать",
  tj: "Дастгирӣ",
};

function backup(file) {
  if (!fs.existsSync(file + ".bak")) fs.copyFileSync(file, file + ".bak");
}

// ---------- Home.tsx ----------
let home = fs.readFileSync(homePath, "utf8");

if (home.includes('t("home.donate")')) {
  console.log("Home.tsx: tugma allaqachon qo'shilgan, o'tkazib yuborildi.");
} else {
  backup(homePath);

  // 1) Heart importi
  const importRe = /import\s*\{([^}]*)\}\s*from\s*["']lucide-react["'];?/;
  const m = home.match(importRe);
  if (!m) {
    console.error("XATO: lucide-react importi topilmadi. Heart ni qo'lda import qiling.");
  } else if (!/\bHeart\b/.test(m[1])) {
    const names = m[1].trim().replace(/,\s*$/, "");
    home = home.replace(importRe, `import { ${names}, Heart } from "lucide-react";`);
  }

  // 2) Tugmani downloadCV tugmasidan keyin qo'shish
  const btnRe = /(\{t\("home\.downloadCV"\)\}\s*<\/Button>)/;
  if (!btnRe.test(home)) {
    console.error("XATO: downloadCV tugmasi topilmadi.");
  } else {
    const donateButton = `
                <Button
                  size="lg"
                  icon={<Heart className="h-5 w-5" aria-hidden="true" />}
                  href="${link}"
                  target="_blank"
                  rel="noopener noreferrer"
                  className="bg-gradient-to-r from-primary-500 to-pink-600 hover:from-primary-600 hover:to-pink-700 text-white shadow-glow-red w-full sm:w-auto"
                  aria-label={t("home.donate")}
                >
                  {t("home.donate")}
                </Button>`;
    home = home.replace(btnRe, `$1${donateButton}`);
  }

  // 3) flex-wrap
  home = home.replace(
    "sm:flex-row sm:justify-center lg:justify-start gap-4",
    "sm:flex-row sm:flex-wrap sm:justify-center lg:justify-start gap-4"
  );

  fs.writeFileSync(homePath, home, "utf8");
  console.log("Home.tsx yangilandi.");
}

// ---------- Tarjima fayllari ----------
for (const [lang, text] of Object.entries(translations)) {
  const file = path.join(localesDir, `${lang}.json`);
  if (!fs.existsSync(file)) {
    console.log(`${lang}.json topilmadi, o'tkazib yuborildi.`);
    continue;
  }
  let src = fs.readFileSync(file, "utf8");
  if (/"donate"\s*:/.test(src)) {
    console.log(`${lang}.json: "donate" allaqachon bor.`);
    continue;
  }
  const re = /^(\s*)("downloadCV":\s*"(?:[^"\\]|\\.)*")(,?)(\r?\n)/m;
  if (!re.test(src)) {
    console.error(`XATO: ${lang}.json ichida "downloadCV" topilmadi.`);
    continue;
  }
  backup(file);
  src = src.replace(
    re,
    (_, ind, kv, comma, nl) => `${ind}${kv},${nl}${ind}"donate": "${text}"${comma}${nl}`
  );
  fs.writeFileSync(file, src, "utf8");
  console.log(`${lang}.json yangilandi.`);
}

console.log("Tayyor. Havola:", link);
