# 🎧 MP3 PHP || HTML || CSS

Uma aplicação web completa para gerenciamento e reprodução de álbuns musicais. Este projeto organiza coleções por gênero, permitindo o upload e a categorização dinâmica de faixas através de uma interface moderna e totalmente responsiva.

---

## 🛠️ Tecnologias Usadas

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)

---

## 📂 Arquitetura do Sistema

A estrutura foi desenhada seguindo o padrão de separação de responsabilidades (View/Public):

```text
├── 📁 pages/                 # Páginas do sistema
│   ├── albuns.php            # Visualização dos álbuns
│   ├── erro404.php           # Página de erro de rota
│   ├── musicas.php           # Player e lista de faixas
│   ├── new_album.php         # Cadastro de novos álbuns
│   └── new_music.php         # Cadastro de novas músicas
├── 📁 public/                # Arquivos públicos e ativos
│   ├── 📁 albuns/            # Biblioteca de mídia
│   │   ├── 📁 Funk/          # Gênero: Funk
│   │   │   ├── 📁 music/     # Arquivos .mp3 do gênero
│   │   │   └── funk.jpg      # Capa do álbum/gênero
│   │   ├── 📁 Pagode/        # Gênero: Pagode
│   │   │   ├── 📁 music/     # Arquivos .mp3 do gênero
│   │   │   └── pagode.jpg    # Capa do álbum/gênero
│   │   └── 📁 Samba/         # Gênero: Samba
│   │       ├── 📁 music/     # Arquivos .mp3 do gênero
│   │       └── Samba.jpg     # Capa do álbum/gênero
│   └── global.css            # Estilização (Layout Moderno)
├── helpers.php               # Funções auxiliares
└── index.php                 # Arquivo de entrada principal

---

## ✨ Funcionalidades Principais

* **🎧 Player Interativo:** Interface completa para reprodução de faixas com controle de progresso e volume.
* **📂 Organização Automática:** O sistema mapeia as pastas dentro de `public/albuns/` e gera a interface dinamicamente.
* **🖼️ Gestão de Capas:** Suporte para exibição de artes de álbuns vinculadas a cada gênero musical.
* **➕ Cadastro de Conteúdo:** Telas exclusivas (`new_album.php` e `new_music.php`) para expandir sua biblioteca musical.
* **📱 Design Responsivo:** Experiência otimizada para qualquer dispositivo através do `global.css`.
* **🔗 Roteamento Simples:** Sistema centralizado no `index.php` para navegação entre páginas e tratamento de erros (404).

---

## 🚀 Como Executar o Projeto

Siga os passos abaixo para configurar o ambiente local:

1. **Clonar o Repositório:**
   ```bash
   git clone (https://github.com/caioarlima/site_MP3.git)
2. **Subir o Container:**

docker-compose up -d
3. **Acessar:**
Abra http://localhost:8080 (ou a porta configurada no seu arquivo).
