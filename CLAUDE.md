# CLAUDE.md

## Git commit automático

Después de cada cambio en el código, hacer un `git commit` con los cambios realizados. El commit debe estar a nombre de:

- **Nombre:** Martin Teppa
- **Email:** martinteppa@gmail.com

Usar siempre el siguiente formato para commitear:

```bash
git -c user.name="Martin Teppa" -c user.email="martinteppa@gmail.com" commit -m "mensaje del commit"
```

El mensaje del commit debe describir brevemente qué se hizo, en inglés.

Después de cada commit, hacer un push al repositorio remoto:

```bash
git push
```
