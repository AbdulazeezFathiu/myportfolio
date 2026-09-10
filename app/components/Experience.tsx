import { experience } from "@/lib/data";

export default function Experience() {
  return (
    <section id="experience" className="border-t border-zinc-200 py-16">
      <h2 className="font-mono text-xs uppercase tracking-widest text-zinc-400">
        Experience
      </h2>
      <div className="mt-6 space-y-10">
        {experience.map((job) => (
          <article key={`${job.company}-${job.period}`}>
            <div className="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-1">
              <h3 className="text-base font-medium text-zinc-900">
                {job.role}{" "}
                <span className="text-zinc-400">· {job.company}</span>
              </h3>
              <p className="font-mono text-xs text-zinc-500">
                {job.period}
                {job.location ? ` · ${job.location}` : ""}
              </p>
            </div>
            <ul className="mt-3 list-disc space-y-2 pl-4 text-sm leading-relaxed text-zinc-600 marker:text-zinc-300">
              {job.highlights.map((highlight) => (
                <li key={highlight}>{highlight}</li>
              ))}
            </ul>
          </article>
        ))}
      </div>
    </section>
  );
}