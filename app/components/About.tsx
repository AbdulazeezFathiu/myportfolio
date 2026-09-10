import { bio, skills } from "@/lib/data";

function SectionHeading({ title }: { title: string }) {
  return (
    <h2 className="font-mono text-xs uppercase tracking-widest text-zinc-400">
      {title}
    </h2>
  );
}

export default function About() {
  return (
    <section id="about" className="border-t border-zinc-200 py-16">
      <SectionHeading title="About" />
      <div className="mt-6 space-y-4">
        {bio.map((paragraph) => (
          <p key={paragraph} className="max-w-2xl leading-relaxed text-zinc-600">
            {paragraph}
          </p>
        ))}
      </div>

      <div className="mt-10">
        <h3 className="font-mono text-xs uppercase tracking-widest text-zinc-400">
          Skills
        </h3>
        <div className="mt-6 grid gap-8 sm:grid-cols-2">
          {skills.map((category) => (
            <div key={category.category}>
              <h4 className="text-sm font-medium text-zinc-900">
                {category.category}
              </h4>
              <div className="mt-3 flex flex-wrap gap-2">
                {category.skills.map((skill) => (
                  <span
                    key={skill}
                    className="rounded-sm border border-zinc-200 px-2.5 py-1 font-mono text-xs text-zinc-600"
                  >
                    {skill}
                  </span>
                ))}
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}