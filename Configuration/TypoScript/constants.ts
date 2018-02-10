
plugin.tx_pingandget_pingandget {
    view {
        # cat=plugin.tx_pingandget_pingandget/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:pingandget/Resources/Private/Templates/
        # cat=plugin.tx_pingandget_pingandget/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:pingandget/Resources/Private/Partials/
        # cat=plugin.tx_pingandget_pingandget/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:pingandget/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pingandget_pingandget//a; type=string; label=Default storage PID
        storagePid =
    }
}
