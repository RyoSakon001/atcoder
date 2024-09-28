def calculate_votes_needed(n,m,k,a):
    rem = k - sum(a)

    if n == m:
        print(' '.join(['0'] * n))
        return

    # ord is the list of indices of a, sorted by a[i]
    ord = sorted(range(n), key=lambda i: a[i])
    # b is the sorted list of a
    b = sorted(a)
    # sumb is the cumulative sum of b
    sumb = [0] * (n + 1)
    for i in range(n):
        sumb[i + 1] = sumb[i] + b[i]

    ans = [-1] * n

    def lower_bound(arr, x):
        left, right = 0, len(arr)
        while left < right:
            mid = (left + right) // 2
            if arr[mid] < x:
                left = mid + 1
            else:
                right = mid
        return left

    for i in range(n):
        l = -1
        r = rem + 1
        while r - l > 1:
            mid = (l + r) // 2
            x = b[i] + mid + 1
            rid = lower_bound(b, x)
            lid = n - m - (1 if i >= n - m else 0)
            cnt = 0
            if rid > lid:
                cnt += (rid - lid) * (b[i] + mid + 1) - (sumb[rid] - sumb[lid])
            if lid <= i < rid:
                cnt -= 1
            else:
                cnt += mid
            if cnt > rem:
                r = mid
            else:
                l = mid
        if l == rem:
            ans[ord[i]] = -1
        else:
            ans[ord[i]] = r

    return ans

N, M, K = map(int, input().split())
A = list(map(int, input().split()))

ans = calculate_votes_needed(N, M, K, A)
print(' '.join(map(str, ans)))