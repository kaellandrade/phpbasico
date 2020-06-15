# App Help Desk 💻 🐘

# Formulários 📎
O formulário é uma maneira bastante usada em desenvolvimento WEB para recuperar ou inserir dados em uma página WEB. 
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

* `($_SESSION)` Super global onde será criado valores para cada instância do navegador. Essa super global pode ser compartilhada para diversas páginas da aplicação. Lembrando que essa super global é um **array**.

* `isset($VAR)` Verifica se o valor de um parâmetro está setado.

# Incorporando Scripts 🔗
A técnica de incorporação de scripts permite compartilhar determinados scripts entre diversas páginas. Essa abordagem consiste em aumentar a produtividade e deixar a aplicação menos verbosa e, consequentimente, de fácil entendimento para quem está lendo o código. Para usarmos o compartilhamento de scripts o PHP possibilita quatro construtores. São eles:

* `include("script.php") ou include "script.php"` adiciona um script que está localizado em um determinado path.  Porém, se o script não for encontrado o construtor irá lançar um aviso, **sem cortar o fluxo da aplicação**.

* `require` Semelhante ao `include` adiciona um determinado script da mesma forma, todavia, se o script não for encontrado o construtor lançará um fatal erro, **cortando assim o fluxo da aplicação**

* `require_once` e `include_once` possuí o mesmo comportamento dos supracitados, porém esses dois construtores  adiciona o script **apenas uma vez** desconsiderando futuras implementações do mesmo script.

# Encerrando a Sessão (logoff) 🔻
Com o PHP podemos encerrar uma sessão de duas meneiras diferentes. Uma é destruíndo todos os vaores da `$_SESSION`, e a outra é apagado um índice específico. Veja abaixo as duas maneiras:

- `session_destroy()` permite destruir todos os valores contidos dentro da super global session (`$_SESSION`), ou seja, todos os índices e valores da super global serão apagados. **DEPOIS DE DESTRUIR TODAS OS VALORES DE SESSION É RECOMENDADO UM RELOAD DA PÁGINA**

- `unset($_SESSION['indice'])` essa outra abordagem espera um *array* e seu respectivo índice à ser removido. Essa abordagem permite a remoção de um índice específico de **qualquer array**, mas nesse caso usamos a própria super global session.

# Escrevendo em arquivos 🔻
Linguagem de programação permite a gravação de dados em arquivos textos. Com o PHP não é diferente, veja
como podemos gravar arquivos textos com PHP.

- `fopen('poesia.txt', 'a')`
Cria um arquivo chamado *poesia.txt* de somente escrita **a**
- `fwrite($arquivoVAR, 'TEXTO')`
Escreve no arquivo.
- `fclose($arquivoVAR)`
Fecha o arquivo que foi criado.

Veja o código abaixo:
```php
    $texto = "Um galo sozinho não tece uma manhã - João . C"
    $arquivo = fopen('poesia.txt', 'a'); // 'a' cria o arquivo caso não exista
    fwrite($arquivo, $texto); // escreve no arquivo indicado
    fclose($arquivo);   
```
parametros que podemos passar para `fopen`
- `'r'` Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo;

- `'r+'` Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo;

- `'w'` Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não exitir, tenta criá-lo;

- `'w+'` Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não exitir, tenta criá-lo;

- `'a'` Abre somente para escrita ; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não exitir, tenta criá-lo;

- `'a+'` Abre para leitura e escrita ; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não exitir, tenta criá-lo;

- `'x'` Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a **fopen()** falhará, retornando **FALSE** e gerando um erro nível **E_WARNING**. Se o arquivo não existir, tenta criá-lo;

- `'x+'` Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a **fopen()** falhará, retornando **FALSE** e gerando um erro nível **E_WARNING**. Se o arquivo não existir, tenta criá-lo;

# Lendo arquivos texto
O PHP não só permite escrever em aquivos, além disso, é possível ler os arquivos que foram salvos. O processo é bastante semelhante com o de escrever em arquivos. Vejamos como podemos ler um arquivo de múltiplas linhas:

```PHP
    $arquivo = fopen("arquivo.txt", "r"); #{1}
    while(!feof($arquivo)){#{2}
        echo fgets($arquivo) . '<br/>';#{3}
    }
    fclose($arquivo);#{4}
```
1. `fopen` Abri o arquivo **arquivo.txt** somente para leitura `'r'`

2. `feof` *end-of-file*  Testa pelo fim do arquivo em um ponteiro de arquivo. Retorna **TRUE** se oponteiro estiver no fim do arquivo. Caso contrário retorna **FALSE**.

3. `fgets` Ler uma linha de um ponteiro de arquivo.

4. `fclose` Fecha **$arquivo**.


# Referências
- [🇧ootstrap](https://getbootstrap.com/)
- [🇽AMPP](https://www.apachefriends.org/pt_br/index.html)
- [🇫ontawesome](https://fontawesome.com/)
- [🇵HP](https://www.php.net/)
