import { profile } from "@/lib/data";

export default function Hero() {
  return (
    <section id="top" className="flex min-h-[40svh] flex-col justify-center">
      <h1 className="text-4xl font-semibold tracking-tight text-zinc-900 sm:text-5xl">
        {profile.name}
      </h1>
      <p className="mt-4 font-mono text-sm text-zinc-500">{profile.title}</p>
      <p className="mt-5 max-w-xl text-lg leading-relaxed text-zinc-600">
        {profile.tagline}
      </p>
      <div className="mt-8 flex items-center gap-6">
        <a
          href={profile.github}
          target="_blank"
          rel="noopener noreferrer"
          className="text-sm font-medium text-zinc-900 underline decoration-zinc-300 underline-offset-4 transition-colors hover:decoration-zinc-900"
        >
          GitHub
        </a>
        <a
          href={`mailto:${profile.email}`}
          className="text-sm font-medium text-zinc-900 underline decoration-zinc-300 underline-offset-4 transition-colors hover:decoration-zinc-900"
        >
          Email
        </a>
      </div>
    </section>
  );
}