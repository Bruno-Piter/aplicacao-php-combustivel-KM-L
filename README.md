# Rota Certa

Comparador de custo de viagem por combustível, refatorado a partir de um dos meus primeiros projetos em PHP.

## O que mudou

A versão original aplicava o mesmo consumo em KM/L a todos os combustíveis, o que torna a comparação irreal. Agora você informa a distância e o consumo específico de gasolina, etanol e diesel. O resultado mostra litros estimados, custo por opção e o menor custo total.

## Executar

Requer PHP 8.2 ou superior:

```bash
php -S localhost:8000
```

Depois, abra `http://localhost:8000`.

## Qualidade

- Lógica isolada em `src/FuelCalculator.php`
- Validação no servidor por campo
- Teste nativo em `tests/FuelCalculatorTest.php`
- CI para sintaxe e teste com PHP 8.3

Os preços no código são exemplos e devem ser atualizados conforme a região antes de usar a estimativa para uma decisão real.
