quantidade_pares = int(input())

for i in range(quantidade_pares):
    valores = input().split()
    if int(valores[1]) == 0:
        print('divisao impossivel')
        continue
    print('{0:.1f}'.format(float(valores[0])/float(valores[1])))
