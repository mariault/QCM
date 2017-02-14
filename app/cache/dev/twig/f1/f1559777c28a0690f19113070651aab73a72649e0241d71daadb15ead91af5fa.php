<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_2c79cd4f4b610437525c71fa2fbb209da435da227919dff1e204e3d1f5938198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2433b1cfe05056a05fc01e01f2bd6d225a101e4297a362f1263e5b7f30898306 = $this->env->getExtension("native_profiler");
        $__internal_2433b1cfe05056a05fc01e01f2bd6d225a101e4297a362f1263e5b7f30898306->enter($__internal_2433b1cfe05056a05fc01e01f2bd6d225a101e4297a362f1263e5b7f30898306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2433b1cfe05056a05fc01e01f2bd6d225a101e4297a362f1263e5b7f30898306->leave($__internal_2433b1cfe05056a05fc01e01f2bd6d225a101e4297a362f1263e5b7f30898306_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fad32b65167d540c6ddaad433d317316b6d682d98d2afea3583b609feb9ac314 = $this->env->getExtension("native_profiler");
        $__internal_fad32b65167d540c6ddaad433d317316b6d682d98d2afea3583b609feb9ac314->enter($__internal_fad32b65167d540c6ddaad433d317316b6d682d98d2afea3583b609feb9ac314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_fad32b65167d540c6ddaad433d317316b6d682d98d2afea3583b609feb9ac314->leave($__internal_fad32b65167d540c6ddaad433d317316b6d682d98d2afea3583b609feb9ac314_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Group/list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
