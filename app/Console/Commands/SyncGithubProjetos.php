<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Projeto;

class SyncGithubProjetos extends Command
{
        protected $assinatura = 'github:sync-projetos';
        protected $descricao = 'Sincroniza repositórios do GitHub com a tabela projetos';
    
        public function handle()
        {
            $this->info('Buscando repositórios do GitHub...');
    
            $response = Http::get('https://api.github.com/users/TaiOli/repos');
    
            if ($response->failed()) {
                $this->error('Falha ao acessar a API do GitHub.');
                return;
            }
    
            foreach ($response->json() as $repo) {
                Projeto::updateOrCreate(
                    ['nome' => $repo['name']],
                    [
                        'descricao' => $repo['descricao'],
                        'url' => $repo['html_url'],
                        'linguagem' => $repo['linguagem'],
                        'imagem' => null, 
                    ]
                );
            }
    
            $this->info('Repositórios sincronizados com sucesso!');
        }
}
