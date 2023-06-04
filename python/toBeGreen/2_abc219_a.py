x = int(input())
scores = [40, 70, 90]

if x < scores[0]:
    print(scores[0] - x)
elif x < scores[1]:
    print(scores[1] - x)
elif x < scores[2]:
    print(scores[2] - x)
else:
    print('expert')