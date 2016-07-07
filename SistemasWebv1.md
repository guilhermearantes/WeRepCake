# Documento de Análise de Requisitos

## 1. Introdução
Dada a necessidade de desenvolvermos um projeto para a disciplina de Sistemas Web I, identificamos a necessidade de um problema de gerenciar repúblicas e moradias comunitárias, a idéia inicial do projeto é contemplar toda a parte financeira, patrimoninal e contro de tarefas.


## 2. Descrição do Problema
O nicho de mercado que desejamos atuar: Repúblicas Universitárias e de forma generalizada, todos os tipos de moradias comunitárias, cujo único requisito é ter ao menos dois moradores. 
Problema encontrado: é relacionado à falta de um adequado gerenciamento financeiro e patrimonial das repúblicas estudantis, trabalhistas e moradias comunitárias. O que muitas vezes acarreta no fim (“falência”) da república. 



## 3. Objetivo
O Objetivo Geral é criar um sistema que gerencia todas as demandas de uma moradia comunitária, uma vez que ficou evidente que, para que a república prospere, é necessário uma gestão sólida por parte dos moradores, para que todas as informações importantes (contas, boletos, notas fiscais, comprovantes, documentos, etc.) fiquem armazenadas consistentemente e de forma segura, em um só local, que permita a análise dos dados contidos (gerado por relatórios), para que se possam planejar medidas de prevenção, manutenção, aquisição de bens e serviços, entre outras tomadas de decisões necessárias para a manutenção e desenvolvimento de repúblicas e moradias comunitárias.




## 4. Escopo da Aplicação
A área de domínio do projeto é cobrir a necessidade de um sistema de gerenciamento de repúblicas, que é capaz de gerenciar toda a parte financeira e patrimonial. 

Para o desenvolvimento do sistema utilizamos o dashboard grátis chamado [AdminLTE] que serviu como base para a elaboração do projeto.

## 5. Descrição do Produto

•	Tipo de sistema a ser produzido:

O sistema web proposto visa controlar diversas questões provenientes de uma república estudantil, trabalhista e/ou moradia comunitária, a ideia é tratar questões como o gerenciamento financeiro e controle de patrimônio. No âmbito do controle financeiro, a proposta é criar uma plataforma que permita a inserção, armazenamento e controle das contas fixas e variadas, das notas fiscais individuais (e marcar quais moradores irão participar do rateio), controle de poupança da casa e reserva para urgências, entre outras questões financeiras que envolvem todos os moradores. No âmbito do controle de patrimônio, a ideia é que a plataforma permita a inserção, armazenamento e controle de todos os bens materiais pertencentes à república, além de associar um valor de manutenção ou troca para cada bem material (opcional) dado uma data pré-estipulada, para que as repúblicas possam se planejar no sentido de fazer manutenções e/ou aquisições de novos bens. 

•	Plataforma e principais tecnologias:	

A princípio, estamos utilizando as seguintes tecnologias:

1.	HTML
2.	CSS 
3.	BOOTSTRAP
4.	JAVASCRIPT
5.	PHP
6.	MYSQL
7.	APACHE
8.	WAMP (Windows Apache MySQL PHP)
9.	Brackets 
10.	GitHub 

Porém, devido algumas análises prévias, chegamos à conclusão que a melhor linguagem a ser utilizada para este projeto, devida sua complexidade, é o Ruby on Rails. Porém, dado que iremos aprender apenas no final do semestre, não temos tempo hábil para desenvolver utilizando essa tecnologia. 
Pretendemos futuramente programar aplicativos mobile para Android e IOS que sincronizem com o sistema Web, de tal maneira que o usuário possa utilizar o sistema tanto pelo seu smartphone quanto pela web.

## 6. Casos de uso
  1. Caso de Uso
    * **Nome:** Inserir República
    * **Escopo:** WeRep
    * **Nível:** Objetivo de usuário administrador
    * **Ator primário:** Morador com privilégio administrador
    * **Interessados:**
      1. _Fundador:_ Inserir uma nova república para ser gerenciada.
      2. _Usuários:_ Participar de uma nova forma de gerenciar área financeira e patrimonial de republicas.
      3. _Sistema:_ Registrar uma nova república e auxiliar no seu controle financeiro e patrimonial, facilitando a realização de tarefas complicadas como divisão de contas mensais.
    * **Pré condições:**
      1. O grupo de pessoas deve ter um representante principal.
      2. O nome deve ser diferente do nome das outras repúblicas.
      3. O sistema deve verificar se já existe alguma república com o nome inserido.
      4. O fundador deve aceitar os termos de compromisso.
    * **Garantias de sucesso:** 
      1. A república pode ser criada caso não exista nenhuma outra com o mesmo nome.
    * **Cenário de sucesso principal:**
      1.	Não existir outra república com o mesmo nome.
    * **Extensões:**
      1. Não há.
    * **Requisitos especiais:**
      1. Não há.
    * **Frequência de ocorrência:**
      1. Ocorrerá somente quando for solicitada a criação de uma nova república.
    * **Variações de dados e tecnologia:**
      1. A comparação dos nomes é feita através de uma comunicação com o banco de dados solicitando a existência do nome digitado na hora da criação.
      2. Serão utilizadas as linguagens HTML juntamente com CSS e Java Script para exibição da tela, PHP para comunicação com banco de dados e MySql para definição e manipulação do Banco de Dados.
 

## 7. Diagramas

Foram desenvolvidos alguns diagramas para auxiliar na construção do protótipo, conforme pode ser visto a seguir:

* Diagrama de Casos de Usos:
	![Diagrama de Casos de Usos](https://github.com/)



## 8. Classes

Algumas explicações sobre o diagrama:
Na classe venda, existe um método denominado Incluir, que não retorna nenhuma informação, ou seja, retorna void. Essa mesma explicação serve para as demais classes. Podemos perceber ainda o relacionamento todo-parte na forma de composição na relação entre as classes Venda e Itens e o relacionamento de agregação na relação Itens e Produto.

![Imagem Diagrama de Classes - Ferramenta Astah](https://github.com/)

## 9. Banco de Dados
![Imagem Diagrama ER - Ferramenta MySql](https://github.com/)

## 10. Protótipos

Os protótipos das telas principais do projeto juntamente com o código fonte estão definidos abaixo:
 
### Consultar Vendas:
 
 ![Imagem consultar vendas](https://github.com/brunopego/)
 


## 11. Cronograma

![Cronograma](https://github.com/)

![Grant Chart](https://github.com/)

## 12. Commits

Nesta seção está descrito os principais *Commits* no desenvolvimento da parte inicial do projeto, também está incluso o autor do *commit*, porém o trabalho foi desenvolvido em conjunto e reuniões o que não implica que o nome do autor do *commit* está diretamente relacionado com a total autoria da atividade.

1. commit f17b6fd (@guilhermearantes) -> Neste *commit* deu-se início ao inicio do projeto.


## 13. Referências


