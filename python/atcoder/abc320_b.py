s = input()
ans = 0

def is_kaibun(text):
    return text == text[::-1]

# print(len(s))

for start in range(len(s)):
  for end in range(start, len(s)):
    text = s[start:end+1]
    if is_kaibun(text):
      ans = max(ans, len(text))

print(ans)