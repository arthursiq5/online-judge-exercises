entrada = input()
entrada = entrada.split()

competidores, papel_comprado, folhas_por_competidor = entrada

ok = 'N'

if int(papel_comprado) / int(competidores) >= int(folhas_por_competidor):
    ok = 'S'

print(ok)
