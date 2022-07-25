tipo = int(input())
respostas = input().split()
respostas_corretas = 0

for resposta in respostas:
    if (int(resposta) == tipo):
        respostas_corretas += 1

print("{}".format(respostas_corretas))
