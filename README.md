# 📬 Plugin WordPress – Formulário de Feedback

Plugin WordPress que exibe um formulário simples via shortcode e salva os feedbacks em uma tabela personalizada no banco de dados.

---

## 🚀 Como Usar

1. Faça upload da pasta do plugin ou envie o `.zip` no painel do WordPress.
2. Ative o plugin.
3. Em qualquer post ou página, insira este shortcode:

```
[form_feedback]
```

4. Os feedbacks são salvos automaticamente na tabela `wp_feedbacks`.

---

## 💡 Funcionalidades

- Cria tabela no banco ao ativar (`wp_feedbacks`)
- Salva mensagens com `sanitize_text_field()` para evitar injeções
- Usa `$wpdb` para operações seguras no banco
- Simples e funcional, ideal pra coletar sugestões, comentários e opiniões

---

## 💻 Tecnologias

- PHP
- WordPress Shortcodes
- Banco de dados (`$wpdb`)
- Segurança básica com `sanitize_text_field()`

---

## 🧑‍💻 Autor

Desenvolvido por [Wallan Peixoto](https://github.com/WallanDavid)

---

## ⭐ Achou útil? Deixa aquela estrela no repositório 😉
