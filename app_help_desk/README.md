# App Help Desk 💻

# Formulários 📎
Os formulários é uma maneira bastante usada em desenvolvimento WEB para recuperar ou inserir dados em uma página WEB. 
Para fazer com que os formulários funcionem em PHP, precisamos de alguns atributos do HTML, são eles:
* `action = "script_form.php"` Nos diz para onde enviar os dados desse formulário. 
* `method = "get ou post"` Informa a maneira de enviar esses dados, `method = get` é o padrão.
* `name = 'email'` serve como identidade do campo email, esse atributo deve ser único.

Ao enviar alguns dados de um formulário para o determinado Script PHP, nós podemos recuperar os valores dos campos do formulário com variáveis **super globais**, e esses valores serão tratados como *arrays*, As variáveis **super globais** são:
* `$_GET` 
* `$_POST`

# Autenticando Páginas 🔐
O PHP oferece recuros para proteção de páginas. Esses recursos são bastante usados para autenticar um usúario a fim de receber determinado conteúdo. 

* `session_start()` Comando usado para criar uma sessão. Esse comando, em conjunto com determinado método de autenticação, é muito usado para restringir o acesso a páginas WEB.

* `($_SESSION)` Super global onde será criado valores para cada instância do navegador. Essa super global pode ser compartilhada para diversas páginas da aplicação. Lembrando que é um essa super global é **array**.

* `isset($VAR)` Verifica se ovalor de um parâmetro está setado.

# Incorporando Scripts 🔗
A técnica de incorporação de scripts permite compartilhar determinados scripts entre diversas páginas. Essa abordagem consiste em aumentar a produtividade e deixar a aplicação menos verbosa e, consequentimente de fácil entendimento para quem está lendo o código. Para usarmos o compartilhamento de scripts o PHP possibilita quatro construtores. São elas:

* `include("script.php") ou include "script.php"` adiciona um script que está localizado em um determinado path.  Porém, se o script não for encontrado o construtor irá lançar um aviso, **sem cortar o fluxo da aplicação**.

* `require` Semelhante ao `include` adiciona um determinado script da mesma forma, todavia, se o script não for encontrado o construtor lançará um fatal erro, **cortando assim o fluxo da aplicação**

* `require_once` e `include_once` possuí o mesmo comportamento dos mesmo citados anteriormente, porém esses dois construtores  adciona o script **apenas uma vez** desconsiderando futuras implementações.

# Referências
- [🇧ootstrap](https://getbootstrap.com/)
- [🇽AMPP](https://www.apachefriends.org/pt_br/index.html)

