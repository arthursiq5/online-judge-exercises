entrada = int(input())
nota = 'E'

if (entrada >= 1):
    nota = 'D'
if (entrada > 35):
    nota = 'C'
if (entrada > 60):
    nota = 'B'
if (entrada > 85):
    nota = 'A'

print(nota)
