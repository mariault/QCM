<?php

/* QCMBackBundle:Default:add.html.twig */
class __TwigTemplate_7807b6580cd306bb2dfa972ec3686e3b3e57051ddccdd2b3a9308f779e7a3601 extends Twig_Template
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
        $__internal_0d1db5ddbe0d152e6dc6ab76397100a57e4dfe499bc041cb64d125ef8e2c015b = $this->env->getExtension("native_profiler");
        $__internal_0d1db5ddbe0d152e6dc6ab76397100a57e4dfe499bc041cb64d125ef8e2c015b->enter($__internal_0d1db5ddbe0d152e6dc6ab76397100a57e4dfe499bc041cb64d125ef8e2c015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QCMBackBundle:Default:add.html.twig"));

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
        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcfBundle/css/style.css"), "html", null, true);
        echo "\"></link>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <header>
        
           
    </header>   
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "
<footer>
    
</footer>
</body>
</html>";
        
        $__internal_0d1db5ddbe0d152e6dc6ab76397100a57e4dfe499bc041cb64d125ef8e2c015b->leave($__internal_0d1db5ddbe0d152e6dc6ab76397100a57e4dfe499bc041cb64d125ef8e2c015b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8707f0370cbd70a49ad64a5203fcfcdba85d649f0fd64bb58aa36ee9ea815c4 = $this->env->getExtension("native_profiler");
        $__internal_f8707f0370cbd70a49ad64a5203fcfcdba85d649f0fd64bb58aa36ee9ea815c4->enter($__internal_f8707f0370cbd70a49ad64a5203fcfcdba85d649f0fd64bb58aa36ee9ea815c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f8707f0370cbd70a49ad64a5203fcfcdba85d649f0fd64bb58aa36ee9ea815c4->leave($__internal_f8707f0370cbd70a49ad64a5203fcfcdba85d649f0fd64bb58aa36ee9ea815c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_884050aef48527787890eecf585835267539ec9b2dd38ce79a9edd9c272c46be = $this->env->getExtension("native_profiler");
        $__internal_884050aef48527787890eecf585835267539ec9b2dd38ce79a9edd9c272c46be->enter($__internal_884050aef48527787890eecf585835267539ec9b2dd38ce79a9edd9c272c46be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        
        $__internal_884050aef48527787890eecf585835267539ec9b2dd38ce79a9edd9c272c46be->leave($__internal_884050aef48527787890eecf585835267539ec9b2dd38ce79a9edd9c272c46be_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_8138e3495f33b544f7e0400d912b0a4c788f469fd5dc1e58149f7cfab03901e6 = $this->env->getExtension("native_profiler");
        $__internal_8138e3495f33b544f7e0400d912b0a4c788f469fd5dc1e58149f7cfab03901e6->enter($__internal_8138e3495f33b544f7e0400d912b0a4c788f469fd5dc1e58149f7cfab03901e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div class=\"well\">
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    <div>
    
    ";
        
        $__internal_8138e3495f33b544f7e0400d912b0a4c788f469fd5dc1e58149f7cfab03901e6->leave($__internal_8138e3495f33b544f7e0400d912b0a4c788f469fd5dc1e58149f7cfab03901e6_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_157811ef1a3e8de2e4d08a593b49ee6b2dbb9c745400b666ccb8144fd3c1122d = $this->env->getExtension("native_profiler");
        $__internal_157811ef1a3e8de2e4d08a593b49ee6b2dbb9c745400b666ccb8144fd3c1122d->enter($__internal_157811ef1a3e8de2e4d08a593b49ee6b2dbb9c745400b666ccb8144fd3c1122d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_157811ef1a3e8de2e4d08a593b49ee6b2dbb9c745400b666ccb8144fd3c1122d->leave($__internal_157811ef1a3e8de2e4d08a593b49ee6b2dbb9c745400b666ccb8144fd3c1122d_prof);

    }

    public function getTemplateName()
    {
        return "QCMBackBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  103 => 18,  100 => 17,  94 => 16,  87 => 7,  81 => 6,  69 => 5,  57 => 23,  55 => 22,  53 => 16,  43 => 9,  38 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/EcfBundle/css/style.css') }}"></link>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*     <header>*/
/*         */
/*            */
/*     </header>   */
/*     {% block body %}*/
/*     <div class="well">*/
/*     {{ form(form) }}*/
/*     <div>*/
/*     */
/*     {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
/* <footer>*/
/*     */
/* </footer>*/
/* </body>*/
/* </html>*/
