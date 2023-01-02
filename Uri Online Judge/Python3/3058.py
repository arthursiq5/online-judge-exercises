n = int(input())
valores_por_grama = []

for i in range(n):
    p, g = input().split()
    p, g = float(p), int(g)

    valores_por_grama.append((p * 1000) / g)

print('{0:.2f}'.format(min(valores_por_grama)))
