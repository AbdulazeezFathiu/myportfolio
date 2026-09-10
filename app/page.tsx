import About from "@/app/components/About";
import Contact from "@/app/components/Contact";
import Education from "@/app/components/Education";
import Experience from "@/app/components/Experience";
import Header from "@/app/components/Header";
import Hero from "@/app/components/Hero";
import Projects from "@/app/components/Projects";

export default function Home() {
  return (
    <div className="pb-16">
      <Header />
      <main className="mx-auto max-w-3xl px-6">
        <Hero />
        <About />
        <Experience />
        <Education />
        <Projects />
        <Contact />
      </main>
    </div>
  );
}