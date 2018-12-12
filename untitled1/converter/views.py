from django.shortcuts import render


def search(index):
    if index >= 0:
        with open('file.txt') as f:
            content = f.read().splitlines()
        s = content[index]
        return s.partition(' ')[2]
    else:
        return ""


def converter(request):
    key = request.GET.get("key11", "")
    try:
        dop = int(key)
    except ValueError:
        dop = -1
    res = {"year": search(dop - 1)}
    return render(request, "converter.html", context = res)
# Create your views here.
