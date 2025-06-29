# 📬 Plugin WordPress – Formulário de Feedback

Plugin WordPress que exibe um formulário com nome, e-mail e mensagem via shortcode, salva os dados no banco e permite visualizar os feedbacks recebidos no painel administrativo.

---

## 🚀 Como Usar

1. Faça upload da pasta do plugin ou envie o `.zip` pelo painel do WordPress.
2. Ative o plugin.
3. Em qualquer post ou página, insira este shortcode:

```
[form_feedback]
```

4. Os feedbacks serão salvos automaticamente na tabela `wp_feedbacks`.

5. Para visualizar os feedbacks, acesse o menu **"Feedbacks"** no painel do WordPress.

---

## 💡 Funcionalidades

- Formulário com campos de **nome**, **e-mail** e **mensagem**
- Cria tabela no banco ao ativar (`wp_feedbacks`)
- Usa `sanitize_text_field()`, `sanitize_email()` e `sanitize_textarea_field()` para segurança
- **Honeypot invisível** para bloqueio de bots e spam
- Salva feedbacks com data de envio
- Interface administrativa com listagem dos dados no painel (`add_menu_page`)
- Sem dependências externas, leve e funcional

---

## 💻 Tecnologias

- PHP
- WordPress Shortcodes
- `$wpdb` para acesso ao banco de dados
- Painel admin com `add_menu_page()`
- Segurança com validações e sanitização

---

## 🧑‍💻 Autor

Desenvolvido por [Wallan Peixoto](https://github.com/WallanDavid)

---

## ⭐ Curtiu o plugin?

Se achou útil, deixa uma estrela no repositório e compartilha com a comunidade 😉
