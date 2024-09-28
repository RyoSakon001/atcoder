def calculate_votes_needed(N, M, K, A):
    total_votes_so_far = sum(A)
    remaining_votes = K - total_votes_so_far
    S = sorted(A, reverse=True)
    ans_arr = [0] * N

    # cnt_greater[V] = number of candidates with votes greater than V
    cnt_greater = {}
    for i, v in enumerate(S):
        if v not in cnt_greater:
            cnt_greater[v] = i

    # For convenience, add an extra element to S to avoid index errors
    S.append(0)

    for i in range(N):
        Ai = A[i]
        cnt_greater_i = cnt_greater[Ai]
        if cnt_greater_i >= M:
            # Candidate is not in top M
            BM = S[M-1]  # M-th highest opponent's vote
        else:
            # Candidate is in top M
            BM = S[M]    # (M+1)-th highest vote
        Ai_plus_R = Ai + remaining_votes

        if Ai_plus_R <= BM:
            ans_arr[i] = -1
        elif Ai > BM + remaining_votes:
            ans_arr[i] = 0
        else:
            x = (BM + remaining_votes - Ai + 1) // 2
            ans_arr[i] = x

    return ans_arr

N, M, K = map(int, input().split())
A = list(map(int, input().split()))

ans = calculate_votes_needed(N, M, K, A)
print(' '.join(map(str, ans)))

