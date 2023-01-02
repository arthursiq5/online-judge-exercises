n, m = input().split()
n = int(n)
m = int(m)

for i in range(m):
    acao = input()
    if acao == 'fechou':
        n+=1
    elif n > 0:
        n-=1

print("{}".format(n))
