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
        $__internal_a13cee84c9199b05cf304b2fc4368c41e473525b83ce1ead3969abb37734f29d = $this->env->getExtension("native_profiler");
        $__internal_a13cee84c9199b05cf304b2fc4368c41e473525b83ce1ead3969abb37734f29d->enter($__internal_a13cee84c9199b05cf304b2fc4368c41e473525b83ce1ead3969abb37734f29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a13cee84c9199b05cf304b2fc4368c41e473525b83ce1ead3969abb37734f29d->leave($__internal_a13cee84c9199b05cf304b2fc4368c41e473525b83ce1ead3969abb37734f29d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac7e15384497ebb2d79d9734cd2df5d72dbc3a4fa53367a6a696fab71b21cf7f = $this->env->getExtension("native_profiler");
        $__internal_ac7e15384497ebb2d79d9734cd2df5d72dbc3a4fa53367a6a696fab71b21cf7f->enter($__internal_ac7e15384497ebb2d79d9734cd2df5d72dbc3a4fa53367a6a696fab71b21cf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_ac7e15384497ebb2d79d9734cd2df5d72dbc3a4fa53367a6a696fab71b21cf7f->leave($__internal_ac7e15384497ebb2d79d9734cd2df5d72dbc3a4fa53367a6a696fab71b21cf7f_prof);

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
