<?php

/* ::base.html.twig */
class __TwigTemplate_5a1ff325d6dd48b54cd8601cc861f86a5cd1ed3fefd177c873b00aa8c7fee1cc extends Twig_Template
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
        $__internal_103d840c17e7d1e9dd00c83a04aa776a1d26a52ac441bc78f029aaefc2e9ed5c = $this->env->getExtension("native_profiler");
        $__internal_103d840c17e7d1e9dd00c83a04aa776a1d26a52ac441bc78f029aaefc2e9ed5c->enter($__internal_103d840c17e7d1e9dd00c83a04aa776a1d26a52ac441bc78f029aaefc2e9ed5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_103d840c17e7d1e9dd00c83a04aa776a1d26a52ac441bc78f029aaefc2e9ed5c->leave($__internal_103d840c17e7d1e9dd00c83a04aa776a1d26a52ac441bc78f029aaefc2e9ed5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a3129f2717461e9a660da7b608fce80e4aaef38302dae6be48a54b568529e1e = $this->env->getExtension("native_profiler");
        $__internal_0a3129f2717461e9a660da7b608fce80e4aaef38302dae6be48a54b568529e1e->enter($__internal_0a3129f2717461e9a660da7b608fce80e4aaef38302dae6be48a54b568529e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QCM";
        
        $__internal_0a3129f2717461e9a660da7b608fce80e4aaef38302dae6be48a54b568529e1e->leave($__internal_0a3129f2717461e9a660da7b608fce80e4aaef38302dae6be48a54b568529e1e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd30d62921c4f9c8ca81db8e35ee1080109ac7cd88411c6c927149f935c1ebfd = $this->env->getExtension("native_profiler");
        $__internal_fd30d62921c4f9c8ca81db8e35ee1080109ac7cd88411c6c927149f935c1ebfd->enter($__internal_fd30d62921c4f9c8ca81db8e35ee1080109ac7cd88411c6c927149f935c1ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd30d62921c4f9c8ca81db8e35ee1080109ac7cd88411c6c927149f935c1ebfd->leave($__internal_fd30d62921c4f9c8ca81db8e35ee1080109ac7cd88411c6c927149f935c1ebfd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_130a369f4c879c1303472a238444143b006c231542490dc99e7ba1d3cdc8b59b = $this->env->getExtension("native_profiler");
        $__internal_130a369f4c879c1303472a238444143b006c231542490dc99e7ba1d3cdc8b59b->enter($__internal_130a369f4c879c1303472a238444143b006c231542490dc99e7ba1d3cdc8b59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Hello QCM";
        
        $__internal_130a369f4c879c1303472a238444143b006c231542490dc99e7ba1d3cdc8b59b->leave($__internal_130a369f4c879c1303472a238444143b006c231542490dc99e7ba1d3cdc8b59b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5963221d845ca77c9a6b22ab9559b65d6ed8966526ac56cb45fa0760c3cfa4c5 = $this->env->getExtension("native_profiler");
        $__internal_5963221d845ca77c9a6b22ab9559b65d6ed8966526ac56cb45fa0760c3cfa4c5->enter($__internal_5963221d845ca77c9a6b22ab9559b65d6ed8966526ac56cb45fa0760c3cfa4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5963221d845ca77c9a6b22ab9559b65d6ed8966526ac56cb45fa0760c3cfa4c5->leave($__internal_5963221d845ca77c9a6b22ab9559b65d6ed8966526ac56cb45fa0760c3cfa4c5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}QCM{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}Hello QCM{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
