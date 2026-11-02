// BeginOAWidget_Instance_2648024: #OAWidget
/*
      // 	ClearBox Config File (JavaScript)
      */
      
      var
      
      // CB layout:
      
      CB_MinWidth=300,				// minimum (only at images) or initial width of CB window
      CB_MinHeight=300,				// initial heigth of CB window
      CB_WinPadd=15,					// padding of the CB window from sides of the browser 
      CB_ImgBorder=2,					// border size around the picture in CB window
      CB_ImgBorderColor='#FFFFFF',			// border color around the picture in CB window
      CB_Padd=4,					// padding around inside the CB window
      
      CB_BodyMarginLeft=0,				//
      CB_BodyMarginRight=0,				// if you set margin to <body>,
      CB_BodyMarginTop=0,				// please change these settings!
      CB_BodyMarginBottom=0,				//
      
      CB_ShowThumbnails='off',			// it tells CB how to show the thumbnails ('auto', 'always' or 'off') thumbnails are only in picture-mode!
      CB_ThumbsBGColor='#000',			// color of the thumbnail layer
      CB_ThumbsBGOpacity=.35,				// opacity of the thumbnail layer
      CB_ActThumbOpacity=.65,				// thumbnail opacity of the current viewed image
      
      CB_SlideShowBarColor='#FFFFFF',			// color of the slideshow bar
      CB_SlideShowBarOpacity=.05,			// opacity of the slideshow bar
      CB_SlideShowBarPadd=17,				// padding of the slideshow bar (left and right)
      CB_SlideShowBarTop=2,				// position of the slideshow bar from the top of the picture
      
      CB_SimpleDesign='on',				// if it's 'on', CB doesn't show the frame but only the content - really nice ;)
      
      CB_CloseBtnTop=-10,				// vertical position of the close button in picture mode
      CB_CloseBtnRight=-14,				// horizontal position of the close button in picture mode
      CB_CloseBtn2Top=-20,				// vertical position of the close button in content mode
      CB_CloseBtn2Right=-30,				// horizontal position of the close button in content mode
      
      CB_OSD='off',					// turns on OSD
      CB_OSDShowReady='off',				// when clearbox is loaded and ready, it shows an OSD message
      
      // CB font, text and navigation (at the bottom of CB window) settings:
      
      CB_FontT='Verdana',				//
      CB_FontSizeT=13,				// these variables are referring to the title or caption line
      CB_FontColorT='#000000',				// 
      CB_FontWeightT='normal',			//
      
      CB_FontC='arial',				//
      CB_FontSizeC=11,				// these variables are referring to
      CB_FontColorC='#000000',				// comment lines under the title
      CB_FontWeightC='normal',			//
      CB_TextAlignC='justify',			//
      CB_txtHCMax=120,				// maximum height of the comment box in pixels
      
      CB_FontG='arial',				//
      CB_FontSizeG=11,				// these variables are referring to the gallery name
      CB_FontColorG='normal',				//
      CB_FontWeightG='@@CB_FontWeightG@@',			//
      
      CB_PadT=10,					// space in pixels between the content and the title or caption line
      
      CB_OuterNavigation='off',			// turns outer navigation panel on
      
      CB_ShowURL='off',				// it shows the url of the content if no title or caption is given
      CB_ItemNum='on',				// it shows the ordinal number of the content in galleries
      CB_ItemNumBracket='()',				// whatever you want ;)
      
      CB_ShowGalName='',				// it shows gallery name
      CB_TextNav='on',				// it shows previous and next navigation
      CB_NavTextImgPrvNxt='on',			// it shows previous and next buttons instead of text
      CB_ShowDL='off',					// it shows download controls
      CB_NavTextImgDL='off',				// it shows download buttons instead of text
      
      CB_ImgRotation='on',				// it shows the image rotation controls
      CB_NavTextImgRot='on',				// it shows the image rotation buttons instead of text
      
      // Settings of the document-hiding layer:
      
      CB_HideColor='#000',				// color of the layer
      CB_HideOpacity=1,				// opacity (0 is invisible, 1 is 100% color) of the layer
      CB_HideOpacitySpeed=400,			// speed of fading
      CB_CloseOnH='on',				// CB will close, if you click on background
      
      // CB animation settings:
      CB_Animation='double',				// 'double', 'normal', 'off', 'grow', 'growinout' or 'warp' (high cpu usage)
      CB_ImgOpacitySpeed=300,				// speed of content fading (in ms)
      CB_TextOpacitySpeed=300,			// speed of text fading under the picture (in ms)
      CB_AnimSpeed=300,				// speed of the resizing animation of CB window (in ms)
      CB_ImgTextFade='on',				// turns on or off the fading of content and text
      CB_FlashHide='on',				// it hides flash animations on the page before CB starts
      CB_SelectsHide='on',				// it hides select boxes on the page before CB starts
      CB_SlShowTime=3000,				// default speed of the slideshow (in sec)
      CB_Preload='on',				// preload neighbour pictures in galleries
      CB_ShowLoading='on'				// 
      
      
      
      ;
// EndOAWidget_Instance_2648024