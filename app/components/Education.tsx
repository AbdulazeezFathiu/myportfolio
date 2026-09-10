import { education } from "@/lib/data";

export default function Education() {
  return (
    <section id="education" className="border-t border-zinc-200 py-16">
      <h2 className="font-mono text-xs uppercase tracking-widest text-zinc-400">
        Education
      </h2>
      <ul className="mt-6 space-y-6">
        {education.map((item) => (
          <li key={item.degree}>
            <p className="text-sm font-medium text-zinc-900">{item.degree}</p>
            <p className="mt-1 text-sm text-zinc-600">{item.school}</p>
            <p className="mt-0.5 font-mono text-xs text-zinc-400">
              {item.period}
            </p>
          </li>
        ))}
      </ul>
    </section>
  );
}