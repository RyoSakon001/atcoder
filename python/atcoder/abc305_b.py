p, q = map(str, input().split())

points = [0, 3, 4, 8, 9, 14, 23]
alphabets = 'ABCDEFG'

p_place = alphabets.index(p)
q_place = alphabets.index(q)

print(abs(points[q_place] - points[p_place]))