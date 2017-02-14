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
        $__internal_a975b329f230d440a28af662cc6fb5df20d7ba585d781b846475f19d374f4a5a = $this->env->getExtension("native_profiler");
        $__internal_a975b329f230d440a28af662cc6fb5df20d7ba585d781b846475f19d374f4a5a->enter($__internal_a975b329f230d440a28af662cc6fb5df20d7ba585d781b846475f19d374f4a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a975b329f230d440a28af662cc6fb5df20d7ba585d781b846475f19d374f4a5a->leave($__internal_a975b329f230d440a28af662cc6fb5df20d7ba585d781b846475f19d374f4a5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68a44ff559b91e563ae0201a271037f325dfd7ed7243762c22de5dd13baa3a83 = $this->env->getExtension("native_profiler");
        $__internal_68a44ff559b91e563ae0201a271037f325dfd7ed7243762c22de5dd13baa3a83->enter($__internal_68a44ff559b91e563ae0201a271037f325dfd7ed7243762c22de5dd13baa3a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_68a44ff559b91e563ae0201a271037f325dfd7ed7243762c22de5dd13baa3a83->leave($__internal_68a44ff559b91e563ae0201a271037f325dfd7ed7243762c22de5dd13baa3a83_prof);

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
