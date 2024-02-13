# SPA

Framework PHP para single-page-application (SPA)

<p align="center">
	<img src="spa.png" alt="SPA">
</p>

## Instalação

### 1) Criar projeto

```bash
composer create-project spa/spa <nome do projeto>
```

### 2) Configurações (.env)

```
cp .env.example .env && nano .env
```

### 3) Arquivos estáticos (SPA)

```
make static
```

### 4) Rodar localmente (via php built-in server)

```
make run
```

## Dependências (Composer, Make, Node 10 & NPM)

### Ubuntu (v18.04 ou superior)

```
wget https://getcomposer.org/download/latest-stable/composer.phar
sudo mv composer.phar /usr/bin/composer && sudo chmod +x /usr/bin/
curl -sL https://deb.nodesource.com/setup_10.x | sudo -E bash -
sudo purge nodejs -y
sudo apt-get install -y nodejs build-essential npm -y
sudo npm -g install clean-css less terser
```
