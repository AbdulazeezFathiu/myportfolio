import { profile, projects } from "@/lib/data";

export default function Projects() {
  return (
    <section id="projects" className="border-t border-zinc-200 py-16">
      <h2 className="font-mono text-xs uppercase tracking-widest text-zinc-400">
        Projects
      </h2>
      <div className="mt-6 grid gap-4">
        {projects.map((project) => (
          <article
            key={project.name}
            className="border border-zinc-200 p-5 transition-colors hover:border-zinc-400"
          >
            <div className="flex items-baseline justify-between gap-4">
              <h3 className="text-base font-medium text-zinc-900">
                {project.name}
              </h3>
              {project.status && (
                <p className="font-mono text-xs text-zinc-400">
                  {project.status}
                </p>
              )}
            </div>
            <p className="mt-2 max-w-2xl text-sm leading-relaxed text-zinc-600">
              {project.description}
            </p>
            <div className="mt-3 flex flex-wrap gap-2">
              {project.tech.map((tech) => (
                <span
                  key={tech}
                  className="rounded-sm border border-zinc-200 px-2.5 py-1 font-mono text-xs text-zinc-600"
                >
                  {tech}
                </span>
              ))}
            </div>
          </article>
        ))}
      </div>
      <p className="mt-6 text-sm text-zinc-500">
        More work available on{" "}
        <a
          href={profile.github}
          target="_blank"
          rel="noopener noreferrer"
          className="font-medium text-zinc-900 underline decoration-zinc-300 underline-offset-4 transition-colors hover:decoration-zinc-900"
        >
          GitHub
        </a>
        .
      </p>
    </section>
  );
}