colocacao = int(input())

posicoes_top_x = [1, 3, 5, 10, 25, 50, 100]

for x in posicoes_top_x:
    if colocacao <= x:
        print("Top {}".format(x))
        break
