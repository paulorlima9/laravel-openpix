# LaravelOpenPixServiceTest

Esta é uma classe de teste para verificar se a implementação da interface `LaravelOpenPixContract` está correta na classe `LaravelOpenPixService` e se os métodos de acesso aos contratos específicos estão retornando instâncias corretas das respectivas interfaces.

## Instalação

Certifique-se de ter o PHPUnit instalado em seu ambiente de desenvolvimento para executar esses testes.

## Uso

1. Clone este repositório em seu ambiente de desenvolvimento.
2. Navegue até o diretório onde o arquivo `LaravelOpenPixServiceTest.php` está localizado.
3. Execute o comando `phpunit LaravelOpenPixServiceTest.php` para executar os testes.

## Testes

### `test_openpix_contract`

Verifica se a instância de `LaravelOpenPixService` implementa corretamente a interface `LaravelOpenPixContract`.

### `test_openpix_charge_function`

Verifica se o método `charges()` retorna uma instância válida de `ChargeContract`.

### `test_openpix_refund_function`

Verifica se o método `refunds()` retorna uma instância válida de `RefundsContract`.

### `test_openpix_payments_function`

Verifica se o método `payments()` retorna uma instância válida de `PaymentsContract`.

### `test_openpix_transactions_function`

Verifica se o método `transactions()` retorna uma instância válida de `TransactionContract`.

### `test_openpix_webhooks_function`

Verifica se o método `webhooks()` retorna uma instância válida de `WebhooksContract`.

### `test_openpix_customers_function`

Verifica se o método `customers()` retorna uma instância válida de `CustomerContract`.

## Observações

Certifique-se de que todas as dependências necessárias estão corretamente configuradas antes de executar os testes.
