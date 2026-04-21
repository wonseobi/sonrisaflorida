document.addEventListener('DOMContentLoaded', function() {

  /* ── Mobile Menu & Dropdown Nav ── */
  ;(function() {
    var toggle = document.querySelector('.nav-toggle')
    var isMobile = function() { return window.innerWidth <= 768 }

    // Mobile hamburger toggle
    if (toggle) {
      toggle.addEventListener('click', function() {
        var expanded = document.body.classList.toggle('mobile-open')
        toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false')
      })
    }

    // Close mobile menu when non-dropdown nav-cta clicked
    var cta = document.querySelector('.nav-cta')
    if (cta) {
      cta.addEventListener('click', function() {
        document.body.classList.remove('mobile-open')
        if (toggle) toggle.setAttribute('aria-expanded', 'false')
      })
    }

    // Dropdown items
    var dropdownItems = document.querySelectorAll('.has-dropdown')
    for (var i = 0; i < dropdownItems.length; i++) {
      (function(item) {
        var link = item.querySelector('.nav-link')

        // Mobile: tap parent link toggles dropdown, does NOT navigate
        link.addEventListener('click', function(e) {
          if (isMobile()) {
            e.preventDefault()
            var isOpen = item.classList.toggle('dropdown-open')
            // Close siblings
            for (var j = 0; j < dropdownItems.length; j++) {
              if (dropdownItems[j] !== item) {
                dropdownItems[j].classList.remove('dropdown-open')
              }
            }
          }
        })

        // Desktop: close when clicking outside
        item.addEventListener('mouseleave', function() {
          if (!isMobile()) item.classList.remove('dropdown-open')
        })
      })(dropdownItems[i])
    }

    // Close all dropdowns + mobile menu when clicking outside
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.site-nav') && !e.target.closest('.nav-toggle')) {
        document.body.classList.remove('mobile-open')
        if (toggle) toggle.setAttribute('aria-expanded', 'false')
        for (var i = 0; i < dropdownItems.length; i++) {
          dropdownItems[i].classList.remove('dropdown-open')
        }
      }
    })
  })()

  /* ── Generic Carousel Factory ── */
  function initCarousel(scrollId, prevSel, nextSel, dotsId) {
    var scroll  = document.getElementById(scrollId)
    if (!scroll) return

    var track   = scroll.querySelector('[class$="-track"], .implant-track')
    if (!track) return
    var cards   = track.children
    var dotsEl  = dotsId ? document.getElementById(dotsId) : null
    var prevBtn = document.querySelector(prevSel)
    var nextBtn = document.querySelector(nextSel)
    var total   = cards.length
    var GAP     = 20

    function getVisible() {
      var w = window.innerWidth
      if (w < 480)  return 1
      if (w < 768)  return 2
      if (w < 1024) return 3
      return 4
    }

    function cardW() {
      return cards[0] ? cards[0].offsetWidth : 0
    }

    function currentIdx() {
      var cw = cardW()
      if (!cw) return 0
      return Math.round(scroll.scrollLeft / (cw + GAP))
    }

    function goTo(idx) {
      var max = Math.max(0, total - getVisible())
      idx = Math.max(0, Math.min(idx, max))
      scroll.scrollLeft = idx * (cardW() + GAP)
      setTimeout(syncDots, 50)
    }

    function buildDots() {
      if (!dotsEl) return
      dotsEl.innerHTML = ''
      var count = Math.max(1, Math.max(0, total - getVisible()) + 1)
      for (var i = 0; i < count; i++) {
        var dot = document.createElement('button')
        dot.className = 'implant-dot' + (i === 0 ? ' active' : '')
        dot.setAttribute('aria-label', 'Go to slide ' + (i + 1))
        ;(function(k) { dot.addEventListener('click', function() { goTo(k) }) })(i)
        dotsEl.appendChild(dot)
      }
    }

    function syncDots() {
      if (!dotsEl) return
      var idx  = currentIdx()
      var dots = dotsEl.querySelectorAll('.implant-dot')
      for (var i = 0; i < dots.length; i++) {
        dots[i].classList.toggle('active', i === idx)
      }
    }

    if (prevBtn) prevBtn.addEventListener('click', function(e) {
      e.stopPropagation()
      goTo(currentIdx() - 1)
    })
    if (nextBtn) nextBtn.addEventListener('click', function(e) {
      e.stopPropagation()
      goTo(currentIdx() + 1)
    })

    scroll.addEventListener('scroll', syncDots, { passive: true })
    window.addEventListener('resize', function() { buildDots(); syncDots() }, { passive: true })

    requestAnimationFrame(function() { buildDots() })
  }

  /* ── Implant Carousel ── */
  initCarousel('implantScroll', '.implant-prev', '.implant-next', 'implantDots')

  /* ── Orthodontics Carousel ── */
  initCarousel('orthoScroll', '.ortho-prev', '.ortho-next', 'orthoDots')

  /* ── Sticky Header ── */
  ;(function() {
    var header = document.querySelector('.site-header')
    if (!header) return
    window.addEventListener('scroll', function() {
      header.classList.toggle('scrolled', window.scrollY > 60)
    }, { passive: true })
  })()

  /* ── Nav Dropdown Active Link ── */
  ;(function() {
    var path = window.location.pathname
    var dropdownLinks = document.querySelectorAll('.nav-dropdown a')
    for (var i = 0; i < dropdownLinks.length; i++) {
      var href = dropdownLinks[i].getAttribute('href')
      if (href && href === path) {
        dropdownLinks[i].classList.add('nav-active')
        break
      }
    }
  })()


})
