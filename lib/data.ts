export type Project = {
  name: string;
  description: string;
  tech: string[];
  status?: string;
  links?: {
    source?: string;
    demo?: string;
  };
};

export type ExperienceItem = {
  role: string;
  company: string;
  period: string;
  location?: string;
  highlights: string[];
};

export type SkillCategory = {
  category: string;
  skills: string[];
};

export const profile = {
  name: "Fathiu Azeez",
  title: "Backend Engineer · Full-Stack",
  tagline:
    "I build production systems, scalable APIs, and real-time services.",
  email: "fathiuabdulazeez@gmail.com",
  github: "https://github.com/AbdulazeezFathiu",
  location: "Remote",
};

export const bio = [
  "Backend Engineer experienced in building production systems, scalable APIs, database infrastructure, real-time services, and AI-powered applications.",
  "Strong in Python, FastAPI, PostgreSQL, Celery, Redis, and MongoDB, with experience designing asynchronous and event-driven systems.",
  "Built software spanning quantitative trading, AI infrastructure, B2B automation, and intelligent agent systems.",
];

export const skills: SkillCategory[] = [
  {
    category: "Backend",
    skills: ["Python", "FastAPI", "Node.js", "REST APIs", "Celery", "Redis"],
  },
  {
    category: "Databases",
    skills: ["PostgreSQL", "MongoDB", "MySQL"],
  },
  {
    category: "Languages",
    skills: ["Python", "TypeScript", "C#", "C/C++", "Java"],
  },
  {
    category: "Frontend",
    skills: ["React", "Next.js"],
  },
  {
    category: "Core",
    skills: [
      "API Development",
      "Database Design",
      "Real-Time Systems",
      "Event-Driven Architecture",
      "Asynchronous Processing",
    ],
  },
];

export const experience: ExperienceItem[] = [
  {
    role: "Software Engineer",
    company: "Neuron HQ",
    period: "2024–2025",
    location: "Remote",
    highlights: [
      "Developed backend and full-stack applications using Python, TypeScript, and modern web technologies.",
      "Built real-time systems for tracking, analytics, and operational monitoring.",
      "Developed event-driven services and low-latency APIs for responsive applications.",
      "Designed database integrations and backend services supporting production applications.",
    ],
  },
  {
    role: "Assistant Database Administrator",
    company: "Lens Polytechnic",
    period: "2025–2026",
    highlights: [
      "Administered and optimized organizational databases within the Management Information System department.",
      "Managed database backups, access control, troubleshooting, and performance monitoring.",
      "Maintained secure, reliable, and highly available information systems.",
    ],
  },
  {
    role: "Freelance Software Engineer",
    company: "Remote",
    period: "2023–2025",
    location: "Remote",
    highlights: [
      "Built full-stack web applications, backend APIs, and database-driven systems for clients.",
      "Developed real-time tracking and analytics solutions using event-driven services and low-latency APIs.",
      "Worked with Python, Node.js, TypeScript, PostgreSQL, and MongoDB.",
    ],
  },
];

export const projects: Project[] = [
  {
    name: "Ayo",
    description:
      "Production quantitative trading system with walk-forward validation and integrity and custody controls.",
    tech: ["Python"],
    status: "Production",
  },
  {
    name: "Medula",
    description:
      "AI-driven invoice collections platform with automated outreach, escalation, and background job processing.",
    tech: ["Python", "FastAPI", "Celery", "React"],
  },
  {
    name: "Cortex",
    description:
      "MCP-based memory server that extracts, ranks, and manages durable information for AI agents. Implements similarity-based recall and salience-scaled memory decay.",
    tech: ["Python", "FastAPI", "MCP"],
  },
  {
    name: "Atom",
    description:
      "Backend infrastructure for self-hosted AI models, multi-tenant workspaces, and agents deployed to customer hardware.",
    tech: ["Python", "FastAPI", "Celery", "PyTorch"],
  },
];

export const education = [
  {
    degree: "Master of Information Technology",
    school: "Ladoke Akintola University of Technology (LAUTECH)",
    period: "Expected 2027",
  },
  {
    degree: "B.Sc. Computer Science",
    school: "Summit University",
    period: "2025",
  },
];

export const navLinks = [
  { label: "About", href: "#about" },
  { label: "Experience", href: "#experience" },
  { label: "Projects", href: "#projects" },
  { label: "Contact", href: "#contact" },
];