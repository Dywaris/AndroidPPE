<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82cd0419bff6d1104bd8c0c350a5f8b25a9af252914652d41a16da61ea8c5eed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_037c11be64fc80f4071b52d52c6ef9514d0f382b081113d7c3ccd3c7df5d7e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037c11be64fc80f4071b52d52c6ef9514d0f382b081113d7c3ccd3c7df5d7e80->enter($__internal_037c11be64fc80f4071b52d52c6ef9514d0f382b081113d7c3ccd3c7df5d7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e8d6480537064c0da7f670b1c0fb447e6b32fe65c88cf364a19869b134f95ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d6480537064c0da7f670b1c0fb447e6b32fe65c88cf364a19869b134f95ad5->enter($__internal_e8d6480537064c0da7f670b1c0fb447e6b32fe65c88cf364a19869b134f95ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_037c11be64fc80f4071b52d52c6ef9514d0f382b081113d7c3ccd3c7df5d7e80->leave($__internal_037c11be64fc80f4071b52d52c6ef9514d0f382b081113d7c3ccd3c7df5d7e80_prof);

        
        $__internal_e8d6480537064c0da7f670b1c0fb447e6b32fe65c88cf364a19869b134f95ad5->leave($__internal_e8d6480537064c0da7f670b1c0fb447e6b32fe65c88cf364a19869b134f95ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
