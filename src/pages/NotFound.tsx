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
    <section className="flex min-h-[70vh] items-center justify-center px-4 py-20">
      <Helmet>
        <title>404 - Sahifa topilmadi</title>
        <meta name="robots" content="noindex" />
      </Helmet>

      <div className="flex flex-col items-center text-center">
        <div className="mb-8 flex h-24 w-24 items-center justify-center rounded-3xl bg-purple-100 text-purple-600 dark:bg-purple-950/60 dark:text-purple-400">
          <FileQuestion className="h-12 w-12" />
        </div>

        <h1 className="text-8xl font-black tracking-tight text-gray-900 dark:text-white sm:text-9xl">
          404
        </h1>
        <h2 className="mt-4 text-3xl font-extrabold text-gray-900 dark:text-white">
          Sahifa topilmadi
        </h2>
        <p className="mt-3 max-w-md text-gray-500 dark:text-gray-400">
          The page you are looking for does not exist, or has been removed.
        </p>

        <div className="mt-8 flex flex-wrap items-center justify-center gap-3">
          <button
            onClick={() => navigate(-1)}
            className="inline-flex items-center gap-2 rounded-xl border border-gray-300 px-6 py-3 font-semibold text-gray-900 transition hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
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
