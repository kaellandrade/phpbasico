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


## Referências
- [🇧ootstrap](https://getbootstrap.com/)
- [🇽AMPP](https://www.apachefriends.org/pt_br/index.html)

