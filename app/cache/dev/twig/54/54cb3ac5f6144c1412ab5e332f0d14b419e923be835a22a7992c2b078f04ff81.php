<?php

/* QCMBackBundle:Default:index.html.twig */
class __TwigTemplate_5ebdccc4243b49066a97edaaddf7ca8795b0c33f1d772396caf1392ea60a8745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d9efa2c5357301411dc400c73121c92b7d4ececd4d6a4d1eb1edbf3b82c7883 = $this->env->getExtension("native_profiler");
        $__internal_0d9efa2c5357301411dc400c73121c92b7d4ececd4d6a4d1eb1edbf3b82c7883->enter($__internal_0d9efa2c5357301411dc400c73121c92b7d4ececd4d6a4d1eb1edbf3b82c7883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QCMBackBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcfBundle/css/style.css"), "html", null, true);
        echo "\"></link>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <header>
        
           
    </header>
   
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "
<footer>
    
</footer>
</body>
</html>";
        
        $__internal_0d9efa2c5357301411dc400c73121c92b7d4ececd4d6a4d1eb1edbf3b82c7883->leave($__internal_0d9efa2c5357301411dc400c73121c92b7d4ececd4d6a4d1eb1edbf3b82c7883_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be89ea0ab51e667ee5a1529c07287d047a750373108cf712521b66cad8bb5069 = $this->env->getExtension("native_profiler");
        $__internal_be89ea0ab51e667ee5a1529c07287d047a750373108cf712521b66cad8bb5069->enter($__internal_be89ea0ab51e667ee5a1529c07287d047a750373108cf712521b66cad8bb5069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_be89ea0ab51e667ee5a1529c07287d047a750373108cf712521b66cad8bb5069->leave($__internal_be89ea0ab51e667ee5a1529c07287d047a750373108cf712521b66cad8bb5069_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56a79bfc432a0a32ba1ef82b5cb45ad331d8b2b91bcd854707d3e2de1f8cd7b0 = $this->env->getExtension("native_profiler");
        $__internal_56a79bfc432a0a32ba1ef82b5cb45ad331d8b2b91bcd854707d3e2de1f8cd7b0->enter($__internal_56a79bfc432a0a32ba1ef82b5cb45ad331d8b2b91bcd854707d3e2de1f8cd7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        
        $__internal_56a79bfc432a0a32ba1ef82b5cb45ad331d8b2b91bcd854707d3e2de1f8cd7b0->leave($__internal_56a79bfc432a0a32ba1ef82b5cb45ad331d8b2b91bcd854707d3e2de1f8cd7b0_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_aee5fe3f0d416c640569ff314aaec412c05d633e4ff87a31b5f5b46a093116c6 = $this->env->getExtension("native_profiler");
        $__internal_aee5fe3f0d416c640569ff314aaec412c05d633e4ff87a31b5f5b46a093116c6->enter($__internal_aee5fe3f0d416c640569ff314aaec412c05d633e4ff87a31b5f5b46a093116c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aee5fe3f0d416c640569ff314aaec412c05d633e4ff87a31b5f5b46a093116c6->leave($__internal_aee5fe3f0d416c640569ff314aaec412c05d633e4ff87a31b5f5b46a093116c6_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_582e82015c3d0a5d2fdaf89537a52b2bb17e29c0c5dfa1b20967b148dffdab63 = $this->env->getExtension("native_profiler");
        $__internal_582e82015c3d0a5d2fdaf89537a52b2bb17e29c0c5dfa1b20967b148dffdab63->enter($__internal_582e82015c3d0a5d2fdaf89537a52b2bb17e29c0c5dfa1b20967b148dffdab63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_582e82015c3d0a5d2fdaf89537a52b2bb17e29c0c5dfa1b20967b148dffdab63->leave($__internal_582e82015c3d0a5d2fdaf89537a52b2bb17e29c0c5dfa1b20967b148dffdab63_prof);

    }

    public function getTemplateName()
    {
        return "QCMBackBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  98 => 18,  88 => 7,  82 => 6,  70 => 5,  58 => 20,  56 => 19,  54 => 18,  43 => 10,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*     <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />*/
/*     {% endblock %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/EcfBundle/css/style.css') }}"></link>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*     <header>*/
/*         */
/*            */
/*     </header>*/
/*    */
/*     {% block body %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
/* <footer>*/
/*     */
/* </footer>*/
/* </body>*/
/* </html>*/
