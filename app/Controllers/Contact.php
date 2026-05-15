<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends BaseController
{
    /**
     * Traitement du formulaire de contact
     * POST /contact/send
     */
    public function send()
    {
        // ── Règles de validation ──
        $rules = [
            'prenom'  => 'required|min_length[2]|max_length[100]',
            'nom'     => 'required|min_length[2]|max_length[100]',
            'email'   => 'required|valid_email',
            'sujet'   => 'required|in_list[adhesion,formation,entreprises,partenariat,autre]',
            'message' => 'required|min_length[10]|max_length[2000]',
        ];

        $messages = [
            'prenom'  => ['required' => 'Le prénom est obligatoire.'],
            'nom'     => ['required' => 'Le nom est obligatoire.'],
            'email'   => ['required' => 'L\'email est obligatoire.', 'valid_email' => 'Veuillez saisir un email valide.'],
            'sujet'   => ['required' => 'Veuillez choisir un sujet.'],
            'message' => ['required' => 'Le message est obligatoire.', 'min_length' => 'Le message doit faire au moins 10 caractères.'],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()->to('/#contact')
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        // ── Données validées ──
        $data = [
            'prenom'  => $this->request->getPost('prenom'),
            'nom'     => $this->request->getPost('nom'),
            'email'   => $this->request->getPost('email'),
            'sujet'   => $this->request->getPost('sujet'),
            'message' => $this->request->getPost('message'),
        ];

        // ── Envoi email (à configurer dans .env) ──
        // $email = \Config\Services::email();
        // $email->setTo('bonjour@ayiyikoh-fab.ci');
        // $email->setFrom($data['email'], $data['prenom'] . ' ' . $data['nom']);
        // $email->setSubject('[Ayiyikoh] ' . ucfirst($data['sujet']));
        // $email->setMessage("Nom : {$data['prenom']} {$data['nom']}\nEmail : {$data['email']}\nSujet : {$data['sujet']}\n\n{$data['message']}");
        // $email->send();

        // TODO: Sauvegarder en base si nécessaire
        // $model = new \App\Models\ContactModel();
        // $model->insert($data);

        return redirect()->to('/#contact')
            ->with('success', 'Votre message a bien été envoyé ! Nous vous répondons sous 24h.');
    }
}
