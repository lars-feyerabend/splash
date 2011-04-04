# Recreating the social media sprite

    cd i/
    mkdir s
    cp as.png dl.png em.png fb.png fl.png sk.png pi.png vc.png tw.png tu.png s/
    rm dl.png # obsolete, replaced by pi.png
    mv pi.png dl.png #  for the sake of sequence, pi needs to be dl
    mogrify -colorspace Gray *.png
    montage -tile 9x1 -geometry 24x24+0+0 -background none *.png sn.png
    cd ..
    mkdir t
    cp as.png dl.png em.png fb.png fl.png sk.png pi.png vc.png tw.png tu.png t
    cd t/
    rm dl.png
    montage -tile 9x1 -geometry 24x24+0+0 -background none *.png sn.png
    cd ..
    rm sn.png
    montage -tile 1x2 -geometry +0+0 -background none s/sn.png t/sn.png sn.png
    rm -rf s/ t/