n = int(input())
persons = []
youngest_age = 1000000000
youngest_index = 0

for i in range(n):
    persons.append(input().split(' '))
    persons[i][1] = int(persons[i][1])
    if persons[i][1] <= youngest_age:
        youngest_age = min(youngest_age, persons[i][1])
        youngest_index = i

tmp1 = persons[:youngest_index]
tmp2 = persons[youngest_index:]
sorted_persons = tmp2 + tmp1

for i in range(n):
    print(sorted_persons[i][0])