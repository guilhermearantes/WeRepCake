Use werep;
###############################################################################
#####################     Stored Procedures     ###############################
###############################################################################
# S.P. É o que acontece quando uma trigger "X" é chamada

#Verifica o valor inserido em lancamentos e adiciona esse valor na Conta Corrente
DELIMITER //
DROP PROCEDURE IF EXISTS SP_InsereLancamento //
CREATE PROCEDURE SP_InsereLancamento(valor float) 
BEGIN UPDATE contas SET saldo = saldo + valor 
WHERE nome = 'Conta Corrente' OR nome = 'conta corrente' OR nome = 'ContaCorrente' OR nome = 'contacorrente' OR nome = 'contaCorrente';
END 
// DELIMITER ;


#Verifica o valor removido de Lancamentos e remove esse valor da Conta Corrente
DELIMITER //
DROP PROCEDURE IF EXISTS SP_RemoveLancamento //
CREATE PROCEDURE SP_RemoveLancamento(valor float) 
BEGIN UPDATE contas SET saldo = saldo - valor
WHERE nome = 'Conta Corrente' OR nome = 'conta corrente' OR nome = 'ContaCorrente' OR nome = 'contacorrente' OR nome = 'contaCorrente';
END 
// DELIMITER ;

/*
CREATE PROCEDURE SP_AtualizaVenda( id_venda int,  total_vendido double) 
BEGIN declare contador int(11); 
SELECT count(*) into contador FROM venda 
WHERE idVenda = id_venda; IF contador > 0 
THEN UPDATE venda SET total=total + total_vendido
WHERE idVenda = id_venda; 
ELSE INSERT INTO venda (idVenda, total) values (id_venda, total_vendido); 
END IF; 
END 
// DELIMITER ;
*/









###############################################################################
########################     Triggers     #####################################
###############################################################################
#########    Definições     #################
#    AI : After Insert (Após Inserção);		#
#    AU: After Update (Após Atualização);	#
#    AD: After Delete (Após Exclusão).		#
#    BI: BEFORE Insert (Antes Inserção);	#
#    BU: BEFORE Update (Antes Atualização);	#
#    BD: BEFORE Delete (Antes Exclusão).	#

#Essa trigger será disparada após a inserção de um novo lançamento na tabela de “Lançamentos”:
DELIMITER //
DROP TRIGGER IF EXISTS TRG_InsereLancamento_AI//
CREATE TRIGGER TRG_InsereLancamento_AI
AFTER INSERT ON lancamentos
FOR EACH ROW BEGIN CALL SP_InsereLancamento (new.valor);
END // 
DELIMITER ;

#Essa trigger será disparada após a remoção de um lançamento da tabela de “Lançamentos”:
DELIMITER //
DROP TRIGGER IF EXISTS TRG_RemoveLancamento_AI//
CREATE TRIGGER TRG_RemoveLancamento_AI
AFTER DELETE ON lancamentos
FOR EACH ROW BEGIN CALL SP_RemoveLancamento(old.valor); 
END // 
DELIMITER ;
#BEGIN UPDATE werep.contas SET saldo= saldo - werep.lancamentos.valor WHERE werep.lancamentos.id = id;