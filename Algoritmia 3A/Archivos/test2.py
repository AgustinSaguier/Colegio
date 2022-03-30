with open('matDosNew.txt') as fp:
    qs = fp.readlines()

answers = [eval(q.split('=')[0]) for q in qs if q.strip()]

with open('matDosAnswer.txt', 'w') as fp:
    for q, a in zip(qs, answers):
        fp.write(q.strip() + str(a) + '\n')