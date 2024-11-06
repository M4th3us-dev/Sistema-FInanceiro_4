-- Seleciona o banco de dados (substitua "meu_sistema" pelo nome do seu banco de dados, se necessário)
USE meu_sistema;

-- Inserindo dados iniciais na tabela de Categorias
INSERT INTO categorias (nome, descricao) VALUES
('Alimentação', 'Gastos com alimentos e restaurantes'),
('Transporte', 'Gastos com transporte e locomoção'),
('Lazer', 'Gastos com entretenimento e lazer');

-- Inserindo dados iniciais na tabela de Produtos
INSERT INTO produtos (nome, preco, categoria_id) VALUES
('Pizza', 35.00, 1),              -- Produto na categoria "Alimentação"
('Passagem de Ônibus', 4.50, 2),   -- Produto na categoria "Transporte"
('Cinema', 20.00, 3),              -- Produto na categoria "Lazer"
('Hambúrguer', 15.00, 1),          -- Produto na categoria "Alimentação"
('Taxi', 25.00, 2);                -- Produto na categoria "Transporte"
