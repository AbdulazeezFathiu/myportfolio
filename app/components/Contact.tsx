import { profile } from "@/lib/data";

export default function Contact() {
  return (
    <section id="contact" className="border-t border-zinc-200 py-16">
      <h2 className="font-mono text-xs uppercase tracking-widest text-zinc-400">
        Contact
      </h2>
      <p className="mt-6 max-w-xl leading-relaxed text-zinc-600">
        I’m open to full-time roles and freelance work focused on backend
        systems, scalable APIs, and real-time services.
      </p>
      <a
        href={`mailto:${profile.email}`}
        className="mt-6 inline-block text-lg font-medium text-zinc-900 underline decoration-zinc-300 underline-offset-4 transition-colors hover:decoration-zinc-900"
      >
        {profile.email}
      </a>
    </section>
  );
}