import { useNavigate, Link } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import { Helmet } from 'react-helmet-async';
import { ArrowLeft, FileQuestion, Home } from 'lucide-react';
import { SUPPORTED_LANGS } from '../hooks/usePath';

export function NotFound() {
  const navigate = useNavigate();
  const { i18n } = useTranslation();
  const raw = i18n.language?.split('-')[0] ?? '';
  const lang = (SUPPORTED_LANGS as readonly string[]).includes(raw) ? raw : 'uz';

  return (
    <section className="relative flex min-h-screen items-center justify-center overflow-hidden bg-[#06060d] px-4">
      <Helmet>
        <title>404 - Sahifa topilmadi</title>
        <meta name="robots" content="noindex" />
      </Helmet>

      <div className="pointer-events-none absolute left-1/2 top-1/3 h-[480px] w-[480px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-purple-600/20 blur-3xl" />

      <div className="relative z-10 flex flex-col items-center text-center">
        <div className="mb-8 flex h-24 w-24 items-center justify-center rounded-3xl bg-purple-950/70 text-purple-400 ring-1 ring-purple-500/20">
          <FileQuestion className="h-12 w-12" />
        </div>

        <h1 className="text-8xl font-black tracking-tight text-white sm:text-[10rem] sm:leading-none">
          404
        </h1>
        <h2 className="mt-4 text-3xl font-extrabold text-white">
          Sahifa topilmadi
        </h2>
        <p className="mt-3 max-w-md text-gray-400">
          The page you are looking for does not exist, or has been removed.
        </p>

        <div className="mt-8 flex flex-wrap items-center justify-center gap-3">
          <button
            onClick={() => navigate(-1)}
            className="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-6 py-3 font-semibold text-white transition hover:bg-white/10"
          >
            <ArrowLeft className="h-5 w-5" /> Orqaga
          </button>
          <Link
            to={`/${lang}`}
            className="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-purple-500 to-indigo-500 px-6 py-3 font-semibold text-white shadow-lg shadow-purple-500/30 transition hover:opacity-90"
          >
            <Home className="h-5 w-5" /> Bosh sahifa
          </Link>
        </div>
      </div>
    </section>
  );
}
