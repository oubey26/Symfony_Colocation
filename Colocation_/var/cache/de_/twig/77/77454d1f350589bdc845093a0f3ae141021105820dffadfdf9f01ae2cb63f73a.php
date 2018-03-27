<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_5fa75edd6fa1aa43d4f1af289c6c2f9f11622c799551756dda3206325a850bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_cfeaf25bc85aa99fc280a2668304c03d0f8092ce1e9931b222a1235478115270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfeaf25bc85aa99fc280a2668304c03d0f8092ce1e9931b222a1235478115270->enter($__internal_cfeaf25bc85aa99fc280a2668304c03d0f8092ce1e9931b222a1235478115270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_db82b3f3df25cf8811e6382da7216d0cf3e953be243ee87589b28ff23e0ed736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db82b3f3df25cf8811e6382da7216d0cf3e953be243ee87589b28ff23e0ed736->enter($__internal_db82b3f3df25cf8811e6382da7216d0cf3e953be243ee87589b28ff23e0ed736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfeaf25bc85aa99fc280a2668304c03d0f8092ce1e9931b222a1235478115270->leave($__internal_cfeaf25bc85aa99fc280a2668304c03d0f8092ce1e9931b222a1235478115270_prof);

        
        $__internal_db82b3f3df25cf8811e6382da7216d0cf3e953be243ee87589b28ff23e0ed736->leave($__internal_db82b3f3df25cf8811e6382da7216d0cf3e953be243ee87589b28ff23e0ed736_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbcd3869f8145be97e8bca6157d6388354fc66c1efa760557aa553e73e999a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcd3869f8145be97e8bca6157d6388354fc66c1efa760557aa553e73e999a18->enter($__internal_cbcd3869f8145be97e8bca6157d6388354fc66c1efa760557aa553e73e999a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ba592202a32874e8cebcaeefd73a8b7e76f97aa4d306c24e330f8f1ab008b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba592202a32874e8cebcaeefd73a8b7e76f97aa4d306c24e330f8f1ab008b8d->enter($__internal_1ba592202a32874e8cebcaeefd73a8b7e76f97aa4d306c24e330f8f1ab008b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_1ba592202a32874e8cebcaeefd73a8b7e76f97aa4d306c24e330f8f1ab008b8d->leave($__internal_1ba592202a32874e8cebcaeefd73a8b7e76f97aa4d306c24e330f8f1ab008b8d_prof);

        
        $__internal_cbcd3869f8145be97e8bca6157d6388354fc66c1efa760557aa553e73e999a18->leave($__internal_cbcd3869f8145be97e8bca6157d6388354fc66c1efa760557aa553e73e999a18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
