<?php
declare(strict_types=1);

namespace Controllers;

/**
 * Handles rendering the main landing page.
 */
class HomeController extends BaseController
{
    public function index(): string
    {
        $hero = [
            'name' => 'Jake Andrews',
            'title' => 'Computer Science Student & Developer',
            'tagline' => 'Building useful software with clean, scalable code.',
            'cta_text' => 'View Projects',
            'cta_target' => '#projects',
        ];

        $about = [
            'bio' => 'I am a second-year BSc (Hons) Computer Science student at the University of Salford with a passion for solving real-world problems using technology. I enjoy backend APIs, data visualisation, and building polished user experiences.',
            'facts' => [
                'University' => 'University of Salford, UK',
                'Degree' => 'BSc (Hons) Computer Science',
                'Graduation' => 'Expected 2026',
            ],
        ];

        $skills = [
            'Java', 'Python', 'PHP', 'HTML', 'CSS', 'JavaScript',
            'SQL', 'Bootstrap', 'Flask', 'FastAPI', 'Git', 'GitHub',
        ];

        $projects = [
            [
                'name' => 'Repository Visualisation Web Application',
                'description' => 'Interactive dashboard that analyses GitHub repository activity and visualises contributor insights.',
                'tech' => ['FastAPI', 'Bootstrap', 'Plotly.js', 'PostgreSQL'],
                'github' => 'https://github.com/yourusername/repo-visualisation',
                'demo' => null,
            ],
        ];

        $experience = [
            [
                'role' => 'Shop Assistant',
                'company' => 'Parfetts / Go Local',
                'dates' => 'Oct 2020 – Present',
                'details' => [
                    'Deliver friendly, efficient customer service in a fast-paced retail environment.',
                    'Manage stock deliveries, merchandising, and cash handling with attention to detail.',
                    'Collaborate with the team to keep the store organised and meet daily targets.',
                ],
            ],
        ];

        $alerts = $this->getAlertFromQuery();

        return $this->render('home', [
            'hero' => $hero,
            'about' => $about,
            'skills' => $skills,
            'projects' => $projects,
            'experience' => $experience,
            'alerts' => $alerts,
        ]);
    }

    /**
     * Reads status/message from the query string for contact form feedback.
     */
    private function getAlertFromQuery(): ?array
    {
        if (empty($_GET['status']) || empty($_GET['message'])) {
            return null;
        }

        $status = $_GET['status'] === 'success' ? 'success' : 'danger';
        $message = filter_var($_GET['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        return [
            'type' => $status,
            'message' => $message,
        ];
    }
}

