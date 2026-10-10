import React from 'react';
import { useContent } from '../../context/ContentContext';

/** Badge for a technology a project or service is built with. */
interface TechBadgeProps {
  name: string;
  size?: 'sm' | 'md';
}

const FALLBACK_COLOR = '#8B95A5';

/**
 * Resolves an icon path from the API into a usable image URL.
 * Absolute URLs and data URIs are returned as is; relative paths
 * are resolved from the site root.
 */
const img = (path: string): string =>
  /^(https?:)?\/\//.test(path) || path.startsWith('data:')
    ? path
    : `/${path.replace(/^\//, '')}`;

export const TechBadge: React.FC<TechBadgeProps> = ({ name, size = 'sm' }) => {
  const { technologies } = useContent();
  const meta = technologies[name];
  const color = meta?.color ?? FALLBACK_COLOR;

  const spacing =
    size === 'md' ? 'px-3 py-1.5 text-sm gap-2' : 'px-2.5 py-1 text-xs gap-1.5';
  const iconSize = size === 'md' ? 'w-4 h-4' : 'w-3.5 h-3.5';

  return (
    <span
      className={`inline-flex items-center rounded-full border font-semibold ${spacing}`}
      style={{
        color,
        borderColor: `${color}59`,
        backgroundColor: `${color}1f`,
      }}
    >
      {meta?.icon && (
        <img
          src={img(meta.icon)}
          alt=""
          loading="lazy"
          className={`${iconSize} shrink-0`}
        />
      )}
      {name}
    </span>
  );
};