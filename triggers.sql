Use werep;


#Verifica os itens vendidos na tabela Venda e atualiza os valores
DELIMITER //
DROP PROCEDURE IF EXISTS SP_AtualizaContaCorrente //
CREATE PROCEDURE SP_AtualizaContaCorrente(valor float) 
BEGIN
UPDATE contas SET saldo = saldo + valor
WHERE nome = 'Conta Corrente';
END 
// DELIMITER ;


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

#Esse trigger será disparado após a inserção de um novo lançamento na tabela de “Lançamentos”:
DELIMITER //
DROP TRIGGER IF EXISTS TRG_AddLancamento_BI//
CREATE TRIGGER TRG_AddLancamento_BI
AFTER INSERT ON lancamentos
FOR EACH ROW
BEGIN CALL SP_AtualizaContaCorrente (new.`valor`); 
END // 
DELIMITER ;